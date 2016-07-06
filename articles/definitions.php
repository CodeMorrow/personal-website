<?php $thisPage = "Coding Definitions"; ?>
<?php $directory = "../"; ?>

<?php include ($directory . 'includes/_top.php');?>

<div class="content">

	<h3 class="definition">Client</h3>
		<p class="define">A Client is a piece of computer hardware or software that accesses a service made available by a server. The Client usually accesses this service by way of a network. Examples of Clients include cell phones, laptop and any other device that accesses the server. </p>

	<h3 class="definition">HTTP</h3>
		<p class="define">HTTTP stands for HyperText Transfer Protocol. It is the underlying protocol used by the World Wide Web. HTTP defines how messages are formatted and transmitted, and what actions Web servers and browsers should take in response to various commands. For example, when you enter a URL in your browser, this actually sends an HTTP command to the Web server directing it to fetch and transmit the requested Web page.</p><br>
		<p class="define">HTTP is called a stateless protocol because each command is executed independently, without any knowledge of the commands that came before it. This is the main reason that it is difficult to implement Web sites that react intelligently to user input. This shortcoming of HTTP is being addressed in a number of new technologies, including ActiveX, Java, JavaScript and cookies.</p>

	<h3 class="definition">Pre-Processor</h3>
		<p class="define">A computer program that modifies data to conform with the input requirements of another program. A Pre-Processor takes data and breaks it down into one file that is compatible with the program in which it is to be executed.</p>

	<h3 class="definition">Query String Parameters</h3>
		<p class="define">A query string is the portion of a URL where data is passed to a Web application and/or back-end database. The reason we need query strings is that the HTTP protocol is stateless by design. For a website to be anything more than a brochure, you need to maintain state (store data). There are a number of ways to do this: On most Web servers, you can use something like session state server-side. On the client, you can store via cookies. Or in the URL, you can store data via a query string</p>

	<h3 class="definition">Request-Response</h3>
		<p class="define">A computer sends request for some data and a second computer responds to the request. Usually there is a series of interchanges until the complete message is sent. For simplicity, this pattern is typically implemented in a purely synchronous fashion, as in web service calls over HTTP, which holds a connection open and waits until the response is delivered or the timeout period expires.</p>

	<h3 class="definition">Server</h3>
		<p class="define">A computer or computer program that manages access to a centralized resource or service in a network. A server is a program that awaits and fulfills requests from client programs in the same or other computers. A given application in a computer may function as a client with requests for services from other programs and also as a server of requests from other programs. Specific to the Web, a Web server is the computer program (housed in a computer) that serves requested HTML pages or files. A Web client is the requesting program associated with the user. The Web browser in your computer is a client that requests HTML files from Web servers.</p>

</div>

<?php include ($directory . 'includes/_bottom.php');?>