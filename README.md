# WordPress ROT13 Email Obfuscator Plugin

Welcome to the ROT13 Email Obfuscator plugin repository on GitHub. This plugin creates a shortcode for an easy-to-use substitution cipher for `mailto:` links. 

The included shortcode helps prevent your email addresses from being harvested by spam-bots. It rests on JavaScript and includes a pure CSS fallback. 

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
