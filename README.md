# shopware-plugin-base
This is a simple Shopware Plugin Base made for developing Plugins

## Installation
1. Clone this repository into your custom/plugins folder or import it via the Plugin Manager
2. Rename the folder to your plugin name
3. Change the plugin name and namespace in the plugin.xml, Bootstrap.php and composer.json to your plugin name
4. Adapt the Plugin to your needs
5. Run `composer install` in your plugin folder
6. Run `bin/console sw:plugin:refresh` in your shopware root folder
7. Install & Activate the Plugin in the Plugin Manager

## Usage
You can use the Plugin as a base for your own Plugin. It already contains a basic structure and some examples.

## License
The MIT License (MIT). Please see [License File](LICENSE) or https://opensource.org/licenses/MIT for more information.

## Contributing
Feel free to contribute to this project. Just create a pull request and check if all the rules below are followed.

## PR Rules
- PSR-2 Coding Standard (VS Code Plugin: https://marketplace.visualstudio.com/items?itemName=fterrag.vscode-php-cs-fixer)
- PHP Mess Detector (VS Code Plugin: https://marketplace.visualstudio.com/items?itemName=ecodes.vscode-phpmd)

## Author
- [Tim Gatzke](development.tim-gatzke.de)

