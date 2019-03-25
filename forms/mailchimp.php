<?php
    // SETTINGS FOR MAILCHIMP SUBSCRIPTION

    // Log in to MailChimp and create an API key under:
    // [ Account ] -> [ Extras ] -> [ API Keys ]
    $apiKey = '1d434ee1465265e010e64a4e82efd3bf-us20';

    // Find your list ID by opening the list in MailChimp, then:
    // [ Settings ] -> [ List name and defaults ]
    $listId = '8073cb39bf';

    // Form data to use as email field
    // (The name="..." value from the email field in your HTML form)
    $emailField = 'email';

    // Fields to be submitted to your MailChimp list along with the email address
    // In this example, "NAME" is the field in your MailChimp list,
    // and $_POST["name"] is the form data from the user to fill that field
    $mergeFields = array(
      "NAME" => $_POST["name"],
    );

    // What the user's status will be after submitting.
    // Options are 'pending', 'subscribed', 'unsubscribed', 'cleaned'
    // We recommend 'pending' as this will result in the user receiving
    // an opt-in confirmation email from MailChimp.
    // For single opt-in use 'subscribed'.
    $status = 'subscribed';

    // Text to show user upon successful subscribe operation
    $successMessage = "Thanks for subscribing to the BoonStock newsletter!";

    // Text to show when the user is already subscribed to the list
    $alreadySubscribed = "You are already subscribed to this list.";

    // Text to show when the user is already subscribed to the list
    $checkConfirmation = "You are already subscribed to this list.";

    // Google reCAPTCHA
    // If your form is configured with a reCAPTCHA widget, this secret key will be used to validate with Google's server.
    $recaptchaSecretKey        = '6Le4tpkUAAAAAERkhyibw05j7Vd6pKV9WemhbXIZ';
    $recaptchaErrorMessage     = 'There was a problem verifying the Google reCaptcha.  Please try again.';

    require('vendor/mediumrare/mailchimp_subscribe.php');
?>
