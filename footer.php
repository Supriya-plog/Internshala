<script>

		function login() {
			var elem = document.getElementById('log');
			if (elem.innerText == "login") {
				document.getElementById("signup").style.display = "none";
				document.getElementById("login").style.display = "block";
				elem.innerText = "signup";
			} else {
				elem.innerText = "login";
				document.getElementById("signup").style.display = "block";
				document.getElementById("login").style.display = "none";
			}
		}
	</script>
</body>

</html>