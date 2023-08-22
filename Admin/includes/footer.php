</div>
    </div>
    <script>

         //calling the function for each modal
        var addFarmErrors = '<?php echo $addFarmErrors; ?>';
        var addFieldErrors = '<?php echo $addFieldErrors; ?>'; 

        if(addFarmErrors){
            toggleModalVisibility(addFarmErrors,'farmModal');//for add farm modal;
        }
        if(addFieldErrors){
            toggleModalVisibility(addFieldErrors,'fieldModal');//for add field modal; 
        }  

        //function to handle modal togle with errors;
        function toggleModalVisibility(jsonErrors, modalId) {
            var modal = document.getElementById(modalId);
            var jsonObject = JSON.parse(jsonErrors);
            var errors = jsonObject.errors;

            if (errors && Object.keys(errors).length > 0) {
                modal.classList.remove('hidden');
            } else {
                modal.classList.add('hidden');
            }
        };
        
    </script>
    <script src="includes/modals.js"></script>
    <script src="../script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>