# Self-XSS v1.2
## Author: https://github.com/thelinuxchoice/self-xss
## Twitter: https://twitter.com/linux_choice

Self-XSS attack using bit.ly to grab cookies tricking users into running malicious code

![sx2](https://user-images.githubusercontent.com/34893261/80316591-0501a880-87d5-11ea-95f0-b8d4fc529bc4.png)

### How it works?

Self-XSS is a social engineering attack used to gain control of victims' web accounts by tricking users into copying and pasting malicious content into their browsers. Since Web browser vendors and web sites have taken steps to mitigate this attack by blocking pasting javascript tag, I figure out a way of doing that using Bit.ly, so we can create a redirect pointing to "website.com/javascript:malicious_code". If the user is tricked to run the javascript code after "website.com/" the cookies of its authenticated/logged session of website.com will be sent to the attacker.

![sxec](https://user-images.githubusercontent.com/34893261/80317403-01245500-87da-11ea-9766-0fe2394a4523.png)

### Features:

Port Forwarding using Ngrok and shortner using Bitly.com (Register for free)

### Requirement

https://bitly.com account (Register for free)

## Legal disclaimer:

Usage of Self-XSS for attacking targets without prior mutual consent is illegal. It's the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program 

### Usage:
```
git clone https://github.com/thelinuxchoice/self-xss
cd self-xss
bash self-xss.sh
```

### Donate!
Support the authors:
### Paypal:
https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CLKRT5QXXFJY4&source=url
