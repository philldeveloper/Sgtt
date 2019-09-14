@extends('layouts.researcher')

@section('content')
<style>
  body{
    font-family: 'Roboto', sans-serif;
    font-weight: 400 !important;
  }
  .nav-tabs .nav-link:hover{
    background-color: white !important;
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
    border: 1px solid #224abe !important;
    color: black !important;    
  }
  .nav-tabs .nav-link{
    border: 1px solid transparent !important;
    color: black !important;   
    background-color: #fefefe !important; 
    border-top-right-radius: 8px !important;
    border-top-left-radius: 8px !important;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }

  .card-shadow {
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }
  

  .card-shadow:hover{
    border: 1px solid #fafafa;
    cursor: pointer;
  }

  .img-category{
    display: flex;
    align-items: flex-start;
  }

  .img-category img {
    width: 64px;
    height: auto;
  }

  .card-body > .title{
    font-weight: bold;
    font-size: 18px;
    color: #212529 !important;
    height: 48px;
  }

  .card-body .subtitle{
    font-size: 15px;
  }

  .card-body .container-button{
    display: flex;
    justify-content: flex-end;
  }

  .card-body button {
    border-radius: 1;
    
  }

  .adjust-center{
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .carrousel-item .active{
    margin: 0 auto !important;
    display: flex;
    align-items: center;
  }

  .container-button button a{
    text-decoration: none;
    color: white;
  }

  /* Section Documents */
  
  .title-container{
    height: 73px;
    background-color: #fff;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 10px; 20px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }
</style>


<div class="title-header">
    <span class="h3 ml-3">Novo Contrato</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<div class="container-fluid mt-4">
</div><!--container-fluid-->


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <div class="img-category mb-4">
              <img src="https://www.flaticon.com/premium-icon/icons/svg/2081/2081811.svg" alt="Shield">
            </div>
            <span class="mt-5 title">Acordo de Cooperação</span>
            <p class="subtitle pt-2">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-sm btn-success"><a href="/contratos">Iniciar</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <div class="img-category mb-4">             
              <img src="https://image.flaticon.com/icons/svg/747/747001.svg" alt="Shield">
            </div>
            <span class="mt-5 title">Transferencia de Tecnologia</span>
            <p class="subtitle pt-2">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-sm btn-success">Iniciar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <div class="img-category mb-4">
              <img src="https://image.flaticon.com/icons/svg/2063/2063350.svg" alt="Shield">
            </div>
            <span class="mt-5 title">Patenteamento de software</span>
            <p class="subtitle pt-2">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-sm btn-success">Iniciar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <div class="img-category mb-4">
              <img src="https://image.flaticon.com/icons/svg/273/273517.svg" alt="Shield">
            </div>
            <span class="mt-5 title">Transferencia de Software</span>
            <p class="subtitle pt-2">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-sm btn-success"><a href="/contratos">Iniciar</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <div class="img-category mb-4">
              <img src="https://image.flaticon.com/icons/svg/1967/1967174.svg" alt="Shield">
            </div>
            <span class="mt-5 title">Acordo de Tordesilhas</span>
            <p class="subtitle pt-2">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-sm btn-success">Iniciar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</div>


  <!-- Page Heading -->
  <div class="title-container mb-4">
    <h3 class="ml-4">Meus Contratos</h3>  
  </div>
  <div class="container">
    <div class="row">
  
      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">
  
        <div class="card p-0 mb-3">
          <!-- Card Body -->
          <div class="card-body p-0 m-0 shadow">
            <div class="table-responsive rounded-0">
              <table class="table table-hover mb-0 rounded-0">
                <thead class="roboto-font font-weight-bold text-dark border-left-success  bg-light" style="font-size: 1.25rem">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Andamento</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody class="mb-0 font-weight-bold text-dark rounded-0">
                  <tr class="">
                    <th scope="row">1</th>
                    <td>Contrato Sindical</td>
                    <td>Transferencia de Tecnologia</td>
                    <td>
                      <div class="progress rounded-0">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Apreciação</div>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Editar</button>
                        <button type="button" class="btn btn-sm btn-danger font-weight-bold rounded-0">Deletar</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="">
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Otto</td>
                    <td>
                      <div class="progress rounded-0">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Recepção</div>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Editar</button>
                        <button type="button" class="btn btn-sm btn-danger font-weight-bold rounded-0">Deletar</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div>
</div>

@endsection