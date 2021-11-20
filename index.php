<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    </head>
    <body>
        <div class="container-fluid">
        <div class="row" style="height: 50px; background-color: aquamarine" >
            <span style="margin: 10px;color: gray">Piloto para integração GOVI x LIVENX</span>
        </div>
        
        <div class="row">
            
            <div class="col-md-2"></div>
            <div class="col-md-8" style="margin-top: 30px">
             
            
                    <form>
                        <div class="form-row">
                          
                            <div class="form-group col-md-6">
                            <label for="origem" ><b>Origem dos Dados</b></label>
            <select id="origem" class="form-control" >
                <option value="GOVI">GOVI</option>
                <option value="PLANILHA">PLANILHA-CSV</option>
            </select>
                        </div> 
                        </div>
                            <div class="form-row">
                        <div class="form-group col-md-6">   
                               
            <button id="carregar" class="btn btn-primary" >Carregar</button>
                            
                                </div></div>
                         <div class="form-row">
                        <div class="form-group col-md-10">  
            <label for="apresentacao"></label>
            <textarea id="apresentacao" class="form-control"></textarea>
             </div></div>
                          <div class="form-row">
                        <div class="form-group col-md-6">   
                               
            <button id="carregar" class="btn btn-success" >Carregar</button>
                            
                                </div></div>
        </form>
                    </div>
                </div>
</div>
    </body>
</html>
