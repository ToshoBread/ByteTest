<style>
	footer {
		display: flex;
		flex-wrap: wrap;
		gap: 2rem;
		justify-content: center;
		height: 5vh;
		width: 100%;
		margin-top: 2rem;
	}

	footer a,
	footer p {
		color: var(--buttonColor);
		transition: color 0.15s ease-in;
	}

	footer a:hover {
		color: var(--sidebarButtonHoverColor);
	}
</style>
<footer>
	<p><strong>&copy; <?php echo date("Y") ?> ByteTest</strong></p>
	<a href="#">Terms</a>
	<a href="#">Privacy</a>
	<a href="#">About</a>
	<a href="#">Contact</a>
	<a href="contentTesting.html">Testing</a>
</footer>