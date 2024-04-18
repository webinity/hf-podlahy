<?php

use Slim\App;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

return function (App $app){
    /**
     * Register web routes here
     * This file gets loaded only if RoutesService is loaded in config
     *
     * If you wish to unload this file, remove the reference in RoutesService.php
     */
        $app->post('/form', function (Request $request, Response $response) {


        $json = $request->getBody();
        $body = json_decode($json, true);

        // Error handling
        $error = false;
        $errors = [];
        if ($body['name'] == null) {
            $error = true;
            $errors['name'] = 'Jméno a příjmení je povinné pole';
        }
        if ($body['email'] == null) {
            $error = true;
            $errors['email'] = 'Email je povinné pole';
        }
        if ($body['phone'] == null) {
            $error = true;
            $errors['phone'] = 'Telefonní číslo je povinné pole';
        }
        if ($body['message'] == null) {
            $error = true;
            $errors['message'] = 'Dotaz / poptávka je povinné pole';
        }

        if ($error == true) {
            $response->getBody()->write(json_encode($errors));
            return $response->withStatus(400);
        } else {
            // NO error
            $transport = Transport::fromDsn($_ENV['MAILER_SMTP']);
            $mailer = new Mailer($transport);

            $senderHtml = "<b>Odesílatel: </b> <br> Jméno: " . $body['name'] . "<br> Telefon: " . $body['phone'] . "<br> Email: " . $body['email'] . "<br>";
            $mailBodyHtml = "<b>Text zprávy: </b> <br>" . $body['message'] . "<br>" . $senderHtml;
            $email = (new Email())
                ->from('info@hfpodlahy.cz')
                ->to('info@hfpodlahy.cz')
                ->priority(Email::PRIORITY_HIGHEST)
                ->subject('Zpráva z webu od: ' . $body['name'] . '(' . $body['phone'] . ')')
                ->text($mailBodyHtml)
                ->html($mailBodyHtml);
                
            try {
                $mailer->send($email);
                // If send is successful
                $newResponse = $response->withStatus(200);
                return $newResponse;

            } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
                // If send fails
                $response->getBody()->write(json_encode(['error' => $e->getMessage()]));
                //$response->getBody()->write(json_encode(['error' => 'Email se nepodařilo odeslat, zkuste to prosím později']));
                return $response->withStatus(400);
            }
        }
    });
};