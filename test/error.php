<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A free, premium quality, responsive one-page website theme for Bootstrap. - Up to date for Bootstrap 3!">

    <title>Start Bootstrap - Free Responsive One Page Theme for Bootstrap 3</title>


	<script src="//cdn.ravenjs.com/1.1.11/jquery,native/raven.min.js"></script>
  </head>

  <body>
		<h2> Javascript error logging</h2>
	<script>
	Raven.config('https://9b4342edaa464fb6a5cc9638de52afd2@app.getsentry.com/22660', {
	    // we highly recommend restricting exceptions to a domain in order to filter out clutter
	    /*whitelistUrls: ['inwiter.com/jscript/']*/
	}).install();
	
	Raven.setUser({
	    email: 'testemail@gmail.com',
	    id: '4'
	});	
	Raven.captureMessage('hello world!');
	try {
	    errorThrowingCode();
	} catch(err) {
	    Raven.captureException(err);
	}
	</script>
  </body>
</html>