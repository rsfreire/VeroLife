$(document).ready(function() { 
      
  $.getJSON('http://rest.qualirede.com.br/intrest/rest/v1/guiamedico/operadoras/18914/planos', function(json, textStatus) {
    $.each( json, function( key, val ) {            
      $('#plano').append(new Option(val.descricao, val.codigo));
    });
  });


  $("#plano").change(function(event) {
    if ($(this).val() != '') {
      $.getJSON('http://rest.qualirede.com.br/intrest/rest/v1/guiamedico/operadoras/18914/ufs', function(json, textStatus) {

        $('#uf').removeAttr('disabled');
        $('#uf').html('');

        $('#uf').append(new Option('Estados', ''));

        $.each( json, function( key, val ) {            
          $('#uf').append(new Option(val.descricao, val.codigo));
        });
      });
    } else {
      $('#uf').val('Estados');
      $('#uf').attr('disabled', 'disabled');
    }
  });
  
  $("#uf").change(function(event) {
    if ($(this).val() != '') {          
      $.getJSON('http://rest.qualirede.com.br/intrest/rest/v1/guiamedico/operadoras/18914/ufs/'+$(this).val()+'/municipios', function(json, textStatus) {

        $('#municipio').removeAttr('disabled');
        $('#municipio').html('');

        $.each( json, function( key, val ) {            
          $('#municipio').append(new Option(val.descricao, val.codigo));
        });

        $("#uf option[value='']").remove();
      });
    } else {
      $('#municipio').html('');
      $('#municipio').append(new Option('Municípios', ''));
      $('#municipio').val('');
      $('#municipio').attr('disabled', 'disabled');
    }
  });

  $("#municipio").change(function(event) {
    if ($(this).val() != '') {          
      $.getJSON('http://rest.qualirede.com.br/intrest/rest/v1/guiamedico/operadoras/18914/municipios/'+$(this).val()+'/bairros', function(json, textStatus) {

        $('#bairro').removeAttr('disabled');
        $('#bairro').html('');
        
        $('#bairro').append(new Option('Todos os bairros', ''));
        $.each( json, function( key, val ) {            
          $('#bairro').append(new Option(val.descricao, val.descricao));
        });

      });
    } else {
      $('#bairro').val('Bairros');
      $('#bairro').attr('disabled', 'disabled');
    }

    if ($(this).val() != '') {                    
      $.getJSON('http://rest.qualirede.com.br/intrest/rest/v1/guiamedico/operadoras/18914/tipoprestadores', function(json, textStatus) {

        $('#tipoPrestador').removeAttr('disabled');
        $('#tipoPrestador').html('');
        
        $.each( json, function( key, val ) {            
          $('#tipoPrestador').append(new Option(val.descricao, val.codigo));
        });

      });
    } else {
      $('#tipoPrestador').val('Serviços');
      $('#tipoPrestador').attr('disabled', 'disabled');
    }
  });

  $("#bairro").change(function(event) {
    
  });

  $("#tipoPrestador").change(function(event) {
    if ($(this).val() != '') {                    
      $.getJSON('http://rest.qualirede.com.br/intrest/rest/v1/guiamedico/operadoras/18914/especialidades', function(json, textStatus) {

        $('#especialidade').removeAttr('disabled');
        $('#especialidade').html('');
        
        $.each( json, function( key, val ) {            
          $('#especialidade').append(new Option(val.descricao, val.codigo));
        });

      });
    } else {
      $('#especialidade').val('Especialidades');
      $('#especialidade').attr('disabled', 'disabled');
    }
  });
  
});