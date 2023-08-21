</div>
    </div>
    <script>
        var modal = document.getElementById('farmModal');
        var jsonErrors = '<?php echo $jsonErrors; ?>'; // Correct way to pass JSON from PHP to JavaScript
        var jsonObject = JSON.parse(jsonErrors);
        var errors = jsonObject.errors;

        if (errors && Object.keys(errors).length > 0) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    </script>
    <script src="../script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>