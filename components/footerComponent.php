<style>
	footer {
		display: flex;
		flex-wrap: wrap;
		gap: 2rem;
		justify-content: center;
		width: 100%;
		margin-top: 2rem;
	}

	footer a,
	footer p {
		font-size: var(--font-s);
		color: var(--footer-txt-color);
		transition: color 0.15s ease-in;
	}

	footer a:hover {
		color: var(--footer-btn-hover);
	}
</style>
<footer>
	<p>
		<strong>&copy;
			<?php echo date("Y") ?>
			ByteTest</strong>
	</p>
	<a href="404.html">Terms</a>
	<a href="404.html">Privacy</a>
	<a href="404.html">About</a>
	<a href="404.html">Contact</a>
</footer>