<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
    <!-- Styles -->
    <link href="../public/css/pdf.css" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<h1>{{$title}} </h1>
	<h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2"> ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI CELEBRAM {{$contrato->nome_ict}}" E {{$contrato->nome_parceiro}}" NA FORMA A SEGUIR.</h5>
	<br>
	<h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">ICT/ente público</h5>
	<br>
	<p>Nome do Parceiro: {{$contrato->nome_teste}}, Natureza Jurídica: {{$contrato->nat_juridica}}, CNPJ: {{$contrato->cnpj}}</p>
</body>
</html>