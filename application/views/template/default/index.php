<div class="container">
	<div class="row">
		<div class="col-xs-12 text">
			<ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#dados-pessoais">Dados Pessoais</a></li>
				<li><a data-toggle="pill" href="#habilitacoes">Habilitações Literárias</a></li>
				<li><a data-toggle="pill" href="#percurso-profissional">Percurso Profissional</a></li>
				<li><a data-toggle="pill" href="#entrevista">Entrevista</a></li>
			</ul>
		</div>
	</div>
	<div class="row">		
		<div class="tab-content" style="margin-top:4em">
			<div id="dados-pessoais" class="tab-pane fade in active">
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nome:" id="nome" name="nome">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" id="data_nascimento" placeholder="Data de nascimento" name="data_nascimento" class="form-control">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Morada:" id="morada" name="morada">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Código Postal:" id="codigo_postal" name="codigo_postal">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Contacto:" id="contacto" name="contacto">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email:" id="email" name="email">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<select class="form-control" id="naturalidade" name="naturalidade">
							<option selected="selected" value="-1">Selecione o país de origem	</option>
							<?php 
							foreach($pais as $p) {
								echo"<option value='".$p->id."'>".$p->country."</option>";
							}

							?>
						</select>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nacionalidade:" id="nacionalidade" name="nacionalidade">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="NIF:" id="nif" name="nif">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="BI/CC:" id="bi" name="bi">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="NISS:" id="niss" name="niss">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Número do cartão de saúde Europeu:" id="ncse" name="ncse">
					</div>
				</div>

				
				
			</div>
			<div id="habilitacoes" class="tab-pane fade">
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Escolaridade:" id="escolaridade" name="escolaridade">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Local de ensino:" id="local_ensino" name="local_ensino">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="col-xs-12 div-ln no-padding">
						Linguas
					</div>
					<div class="col-xs-12 col-md-6 text-right">
						<button class="btn btn-success" type="buton" id="add-linguagem">Adicionar Linguagem</button>
					</div>
					<div class="col-xs-12 col-md-6 text-left">
						<button class="btn btn-danger" type="buton" id="rm-linguagem">Remover Linguagem</button>
					</div>
				</div>

			</div>
			<div id="percurso-profissional" class="tab-pane fade">
				<div class="emprego-wrapper">
					<div class="col-xs-12">
						<div class="form-group">
							<div class="col-xs-12 col-sm-8 text-xs-center no-padding">
								<input type="text" class="form-control" placeholder="Nome da profissão" id="nome_profissao" ame="nome_profissao">
							</div>
							<div class="col-xs-12 col-sm-4 text-xs-center text-right no-padding">
								<button type="button" class="btn btn-success" id="add-prof">Adicionar Profissão</button>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<div class="col-xs-12 col-sm-8 text-xs-center no-padding">
								<input type="text" class="form-control" placeholder="Função exercida" id="nome_funcao" name="nome_funcao">
							</div>
							<div class="col-xs-12 col-sm-4 text-xs-center text-right no-padding">
								<button type="button" class="btn btn-success" id="add-func">Adicionar nova função exercida</button>
							</div>
						</div>
					</div>

					<!-- inicio repetição -->
					<div class="novo-emprego-container">
						<div class="col-xs-12">
							<div class="form-group">
								<?php
								echo"<select name='profissao[]' class='profissao form-control'><option value='-1'>Selecione uma profissão</option>";
								foreach ($profissao as $p) {
									echo"<option value='" . $p->id . "'>" . $p->profissao . "</option>";
								}
								echo"</select>";
								?>
							</div>
						</div>

						<div class="col-xs-12 funcao">
							<div class="form-group">
								<div class="div_funcao">

								</div>
							</div>
						</div>

						<div class="col-xs-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Motivo de saida:" id="motivo_saida" name="motivo_saida">
							</div>
						</div>
					</div>
					<!--fim repeticao-->
				</div>

				<div class="col-xs-12">
					<div class="form-group">
						<button id="add_emprego" class="btn btn-primary">Adicionar novo emprego</button>
					</div>
				</div>				

				
			</div>

			<div id="entrevista" class="tab-pane fade">
				<div class="col-xs-12">
					Entrevista
				</div>
			</div>
		</div>

	</div>

</div>
<script>
	function base_url(url){
		if(typeof(url) == 'undefined') {
			return 'index.php/';
		} else {
			return 'index.php/' + url;
		}
	}

	function request(url,  success, data, type){
		typeof(data) == "undefined" ? data = null : data = data;
		typeof(type) == "undefined" ? type = null : type = type;
		$.ajax({
			url: url,
			data: data,
			type: type,
			success: success
		});
	}

	$(document).ready(function(e){		
		var profissao_length = $(".profissao").length;
		/**for all professions select*/
		$(".profissao").change(function(){
			if($($(".profissao")[profissao_length -1 ]).val() > 0) {
				$.ajax({
					url : "http://localhost/strabat/Response/get_categoria/" + $($(".profissao")[profissao_length -1]).val(),
					success : function(data){
						var html = "<div class='col-xs-12'><div class='div_funcao'>";
							html += "<select class='form-control'><option value='-1'>Selecione a função exercida</option>";
						for (var i = 0; i < data.length; i++) {
							html += "<option value='" + data[i].id + "'>" + data[i].categoria +"</option>";
						}
						html += "</select></div></div>";
						var funcao_length = $(".div_funcao").length;
						//$($(".div_funcao")[funcao_length -1]).html(html);
						$($(".funcao")[$(".funcao").length -1]).append(html);
						console.log(html);
					}
				});
			}
		});

		$("#add-prof").click(function(e){
			e.preventDefault();
			console.log("TESTE");
			if($("#nome_profissao").val().length > 0) {
				$.ajax({
					url: "http://localhost/strabat/Response/insert_profession/" + $("#nome_profissao").val(),
					success: function(data) {
						console.log(data);
					},
					error : function(){

					}
				})
				
			}
		});
		/** adicionar linguagem  */
		$("#add-linguagem").click(function(){
			var ln = "<div class='form-group'><input type='text' placeholder='Lingua' id='ln' name='ln[]' class='form-control ln'></div>";
			$(".div-ln").append(ln);
		});
		/**remover linguagem*/
		$("#rm-linguagem").click(function(){
			($(".ln").length > 0) ? $(".ln")[$(".ln").length - 1 ].remove() : '';
		});
		$('#data_nascimento').datepicker({
			dateFormat: "yy/mm/dd",
			yearRange: "-100:-18",
			changeYear: true
		});
		$("#add_emprego").click(function(e){
			e.preventDefault();
			copy(".novo-emprego-container",".novo-emprego-container");
		})
	});
</script>