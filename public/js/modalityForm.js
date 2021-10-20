$(document).ready(function() {
    $('.target-save').on('click', function(){
        // var description = $('.target-description').val();
        // var level = $('.target-level').val();
        // var type = $('.target-type').val();
        // var distance = $('.target-distance').val();
        // var maxshots = $('.target-maxshots').val();
        // var requirement = $('.target-requirement').val();
        // var scoringFactor = $('.target-scoring-factor').val();
        $.ajax({
            url: '/modalityformtargetsave',
            type: 'POST',
        
            success: function(result){
                console.log("This worked")
                $('.target-save').after('result');
            },

            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, textStatus, errorThrown);
                console.log("This is an AJAX error");
                alert("This is an AJAX Save error");
            }
        })
    });
  
    $('.create-target').on('click', function(){
        $.ajax({
            url: '/modalityformtarget',
            type: 'GET',
        
            success: function(result){
                // var targetTableForm = jQuery.parseJSON(result);
                console.log("This worked")
                $('.target').after(result);
            },

            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR, textStatus, errorThrown);
                console.log("This is an AJAX Create Target error");
            }
        })
    });

    $('.dynamic').change(function() {
        if ($(this).val() != '' && $(this).val() != 'New') { 
            var modName = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '/modalityformfetch',
                type: "POST",
                data: {modName: modName,
                    _token: _token,
                    dependent: dependent
                },
            
                success: function(result) {
                    var modalityArray = jQuery.parseJSON(result);
                    console.log("This is an AJAX success. Modality name is: " + modName);

                        $('#' + dependent).html(result);
                        $('#modName').val(modalityArray['modName']);
                        $('#modtype').val(modalityArray['modtype']);
                        $('#numberOfGames').val(modalityArray['numberOfGames']);
                        $('#notes').val(modalityArray['notes']);

                        if (modalityArray['continuous'] == 1) {
                            $('#continuous').attr('checked', true);
                        } else {
                            $('#continuous').attr('checked', false);
                        }
                    },

                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log([result, modalityArray]);
                        console.log(jqXHR, textStatus, errorThrown);
                        console.log("This is an AJAX error");
                    }
                })                            
            }else {
                // $('#newmodality').val('New');
                $('#modName').val('');
                $('#modtype').val('');
                $('#numberOfGames').val('');
                $('#continuous').attr('checked', false);
                $('#notes').val('');
            };
        });
});