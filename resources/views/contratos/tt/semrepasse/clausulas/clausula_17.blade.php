<div class="container-fluid p-0 mt-0 m-0">
    <div class="text-justify text-black">
        <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">17. CLÁUSULA DÉCIMA SÉTIMA - DO FORO</h5>
        <p><b>17.1.</b>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de
        <input class="myform-control text-black"  type="text" name="estado_foro" placeholder="{{$contratos_sr->estado_foro}}" disabled="">, cidade de <input  class="myform-control" type="text" name="cidade_foro" placeholder="{{$contratos_sr->cidade_foro}}" disabled="">,
                    para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109
                    da Constituição Federal.
                    E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente
                    instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais.
                    </p>
            <input type="text" class="myform-control text-black"  name="cidade_uf_dia_foro" id="" placeholder="{{$contratos_sr->cidade_uf_dia_foro}}" disabled="">   <br>   
        <div class="mb-4 row justify-content-center">
            <div class="col-6 align-self-center">
            <div class="input-control-center">
                <p class="mt-4">Pelo(a)  <span class="text-blue">ICT:</span> 
                <input class="myform-control text-black" type="text" name="ict_inst_foro" id="" placeholder="{{$contratos_sr->ict_inst_foro}}" disabled=""> </p>   
                <input class="mb-2 myform-control text-black" type="text" name="nome_rep_foro" id="" placeholder="{{$contratos_sr->nome_rep_foro}}" disabled=""> 
                <br><input class="mb-2  myform-control text-black" type="text" name="cargo_rep_foro" id="" placeholder="{{$contratos_sr->cargo_rep_foro}}" disabled=""> 
                </div>
            </div>
        </div>
        <div class="mt-4 row justify-content-center">
            <div class="col-6 align-self-center">
            <div class="input-control-center">
                <p>Pelo(a) <span class="text-blue">PARCEIRO PRIVADO:</span> <input class="myform-control text-black" type="text" name="nome_inst_privado_foro" id="" placeholder="{{$contratos_sr->nome_inst_privado_foro}}" disabled=""> </p>      
                <input class="mb-2 myform-control text-black" type="text" name="nome_rep_privado_foro" id="" placeholder="{{$contratos_sr->nome_rep_privado_foro}}" disabled=""> 
                <br><input class="mb-2  myform-control text-black" type="text" name="cargo_rep_privado_foro" id="" placeholder="{{$contratos_sr->cargo_rep_privado_foro}}" disabled=""> 
            </div>
            </div>
        </div>
    </div>
</div>