$(document).ready(function () {
   $('.btnEditar').on('click', function () {
      $('#editarModal').modal('show');

      $tr = $(this).closest('tr');
      var dados = $tr.children("td").map(function () {
          return $(this).text();
      }).get();

      console.log(dados);
      $('#id').val((dados[0]));
      $('#nome').val(dados[1]);
      $('#apelido').val(dados[2]);
      $('#email').val(dados[3]);
      $('#tr').val(dados[4]);
      $('#cidade').val(dados[5]);
      $('#celular').val(dados[6]);
   });
});