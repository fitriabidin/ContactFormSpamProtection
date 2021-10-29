# ContactFormAllMethod
SAM Contact Form spam protection with Multiple Spam Protection Method.

1) HoneyPot Technique => Tricking bot with hidden input and ignore the form if the hidden field is being inserted
2) CSRF Token Technique => Generating random encrypt token and save into session, then checking the session token with input token
3) Set Timer Technique => Set and time the timer of when the form is inserted. Usually a bot will take less than 1s to fill in the page.
