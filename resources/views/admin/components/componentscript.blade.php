 <!-- Validation js (Parsleyjs) -->
 <script src="{{ asset('admin/libs/parsleyjs/parsley.min.js') }}"></script>
 <!-- validation init -->
 <script src="{{ asset('admin/js/pages/form-validation.init.js') }}"></script>
 <!-- init js -->
 <script src="{{ asset('admin/js/pages/form-editor.init.js') }}"></script>
 <!-- Plugins Js -->
 <script src="{{ asset('/admin/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/switchery/switchery.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/multiselect/jquery.multi-select.js') }}"></script>
 <script src="{{ asset('/admin/libs/jquery-quicksearch/jquery.quicksearch.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/select2/select2.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/jquery-mask-plugin/jquery.mask.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/moment/moment.js') }}"></script>
 <script src="{{ asset('/admin/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
 <script src="{{ asset('/admin/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <script src="{{ asset('/admin/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
 <script>
     document.getElementById('componentselect').addEventListener('change', function() {
         var selectedOption = this.options[this.selectedIndex];
         var isManual = selectedOption.getAttribute('data-manual') === '1';
         if (isManual) {
             document.getElementById('componentDataSection').style.display = 'block';
             document.getElementById('component_data_type_manual').disabled = false;
             document.getElementById('component_data_type_connected').disabled = true;
             document.getElementById('component_data_type_manual').checked = true;
         } else {
             document.getElementById('componentDataSection').style.display = 'block';
             document.getElementById('component_data_type_manual').disabled = true;
             document.getElementById('component_data_type_connected').disabled = false;
             document.getElementById('component_data_type_connected').checked = true;
         }
     });
 </script>
 <script>
     var componentGroup = document.getElementsByClassName("componentGroup")[0];

     componentGroup.addEventListener('change', function() {
         var selectedOption = this.options[this.selectedIndex];
         var isection = selectedOption.getAttribute('data-section') === '1';

         var sectionGroup = document.getElementById('sectionGroup');
         var sectionConection = document.getElementById('radioFormGroup');
         if (isection) {
             sectionGroup.style.display = 'block';
             sectionConection.style.display = 'block';
         } else {
             sectionGroup.style.display = 'none';
             sectionConection.style.display = 'none';
         }
     });
 </script>


 <script>
     document.getElementById('componentselect').addEventListener('change', function() {
         // Get the selected option
         var selectedOption = this.options[this.selectedIndex];

         // Get the type_id and sectionTypes->id values
         var typeId = selectedOption.value;
         var sectionTypeId = selectedOption.getAttribute('data-sectionType');

         // Filter sections based on type_id and sectionTypeId
         var sections = document.querySelectorAll('#sectionselect option');
         sections.forEach(function(section) {
             var sectionType = section.getAttribute('data-section-type');

             // Show/hide sections based on the condition
             if (sectionType == sectionTypeId || sectionType == "") {
                 section.style.display = 'block';
             } else {
                 section.style.display = 'none';
             }
         });
     });
     document.getElementById('section_data_type_manual').addEventListener('change', function() {
         var isManualSelected = this.checked;

         // Show/hide the post group based on the manual selection
         var postGroup = document.getElementById('postGroup');
         if (isManualSelected) {
             postGroup.style.display = 'block';
         } else {
             postGroup.style.display = 'none';
         }
     });

     document.getElementById('section_data_type_automate').addEventListener('change', function() {
         var isAutomaticSelected = this.checked;

         // Show/hide the post group based on the automatic selection
         var postGroup = document.getElementById('postGroup');
         if (isAutomaticSelected) {
             postGroup.style.display = 'none';
         } else {
             postGroup.style.display = 'block';
         }
     });
 </script>
 <!-- Init js-->
 <script src="{{ asset('/admin/js/pages/form-advanced.init.js') }}"></script>
 <script>
     $(document).ready(function() {
         $(document).on('click', 'button[name="save"]', function() {
             var danj = $(".danger");
             for (var i = 0; i < danj.length; i++) {
                 var cl3s = danj[i].classList;
                 cl3s.remove("danger");
             }
         });
         $.listen('parsley:field:error', function(parsleyField) {
             var ewes = $("input[name='" + parsleyField.$element.attr('name') + "']").closest(
                 '.tab-pane').attr('id');
             var els = document.querySelectorAll("a[href='" + '#' + ewes + "']");
             for (var i = 0; i < els.length; i++) {
                 var classes = els[i].classList;
                 classes.add("danger");
             }
         });
         $("input").on("input", function() {
             if ($(this).val().length > 0) {
                 var ewes = $(this).closest('.tab-pane').attr('id');
                 var els = document.querySelectorAll("a[href='" + '#' + ewes + "']");
                 for (var i = 0; i < els.length; i++) {
                     var classes = els[i].classList;
                     classes.remove("danger");
                 }
             }
         });
     });
 </script>
 <script>
     var postSelect = document.getElementById("postselect");

     var sectionSelect = document.getElementById("sectionselect");
     var url = postselect.getAttribute('data-route');

     // Initialize Select2
     $(postSelect).select2();

     sectionSelect.addEventListener("change", function() {
         var selectedSectionId = this.value;
         fetchPostsForSection(selectedSectionId);
     });

     function fetchPostsForSection(sectionId) {
         $.ajax({
             url: url,
             data: {
                 sectionId: sectionId
             },
             success: function(data) {
                 updatePostDropdown(data.posts);
             },
             error: function() {
                 // Handle error
             },
         });
     }

     function updatePostDropdown(posts) {
         // Clear existing options
         $(postSelect).empty();

         posts.forEach(function(post) {
             // Assuming translations is an array of translated titles
             var translations = post.translations;
             if (translations && translations.length > 0) {
                 // Use the first translation as an example, you might want to handle multiple translations differently
                 var optionText = translations[0].title;
             } else {
                 // Fallback to the default title if no translations are available
                 var optionText = post.title;
             }

             // Append the option to the Select2 dropdown
             $(postSelect).append(new Option(optionText, post.id, false, false));
         });

         // Refresh the Select2 dropdown
         $(postSelect).trigger('change');

         // Show the postGroup
         document.getElementById("postGroup").style.display = "block";
     }
 </script>
