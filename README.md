# WordPress ROT13 Email Obfuscator Plugin

Welcome to the ROT13 Email Obfuscator plugin repository on GitHub. This plugin provides an easy-to-use [ROT13 substitution cipher](http://en.wikipedia.org/wiki/ROT13) WordPress shortcode for `mailto:` links. This is arguably the most effective method for preventing spam, while still allowing `mailto:` links.

The included shortcode helps prevent harvesting of email addresses by spam-bots. It rests on JavaScript and includes a pure CSS fallback. 

## Usage

Available shortcode parameters:

1. Email address (`email`)
2. Message Subject (`subject`)
3. CSS Class to apply to the link (`class`)
4. Inner link HTML text (`text`)
5. Boolean to include a CSS fallback (`fallback`)

## Examples

    // Most basic shortcode
    [rot13 email="john@example.com"]

    // Custom arguments, without a fallback
    [rot13 email="jane@example.com" text="Example Link Text" subject="Example Subject" class="example-css-class"]

    // Include a CSS fallback for browsers without JavaScript
    [rot13 email="john@example.com" fallback="true"]

## Additional Resources

* [General GitHub documentation](http://help.github.com/)
* [GitHub pull request documentation](http://help.github.com/send-pull-requests/)
