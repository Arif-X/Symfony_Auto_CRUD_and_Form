# Symfony_Auto_CRUD_and_Form
Install Project:
composer create-project symfony/framework-standart-edition crud

# Setting Database MySql Pada File .env:
# IMPORTANT: You MUST configure your server version, either here or in config/packages/doctrine.yaml
DATABASE_URL=mysql://root:@127.0.0.1:3306/db_crud?serverVersion=5.7
###< doctrine/doctrine-bundle ###

Cara Pembuatan AutoCRUD & Form
Buat entity (php bin/console make:entity) -> Buat Controller (php bin/console make:controller NamaController) ->Buat AutoCRUD (php bin/console make:crud  NamaEntity) -> Buat AutoForm (php bin/console make:form)

