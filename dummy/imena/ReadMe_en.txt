1. Copy all from archive into your root directory ("resellers_form" folder and files "api_forms.php", "forms_example.php").
2. File "api_forms.php" must be in the root directory of your site! There must be a direct access to it through http, if it is restricted, for example, by mod_rewrite.
3. In file "forms_example.php" replace "$RESELLER_ID" by your reseller's id.
4. Check your form by calling example script: "http://your-site/forms_example.php".
5. There is a block of code, which connects to our service and receive data. Copy it to your script. Use custom form language - default value is 'ru'.
6. There must be included JQuery library on the form's page. By default it is there: "/resellers_form/jquery.js". You can put it where you want.
7. Images must be in directory: "/resellers_form/imena-checkform-images/". Form, which service response to you, always uses images from this directory.
8. Use your own styles for form classes. Default styles are described in file "/resellers_form/check-form.css".