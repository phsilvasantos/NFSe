<?php
namespace NFSe\issweb;

/**
 *
 * @since 2016-02-10
 * @author Willker Moraes Silva
 *
 */
class NFSeISSWebInfRps{

	/**
	 * @var NFSeISSWebIdentificacaoRps
	 */
	public $IdentificacaoRps;

	/**
	 * @var string
	 */
	public $DataEmissao;

	/**
	 * 1 - Microempresa Municipal
	 * 2 - Estimativa
	 * 3 - Sociedade de Profissionais
	 * 4 - Cooperativa
	 * 5 - Microempres�rio Individual (MEI)
	 * 6 - Microempres�rio e Empresa de Pequeno Porte (ME EPP)
	 *
	 * Obs: Quando a empresa n�o se enquadra em nenhum dos regimes especial de tributa��o acima, a tag que corresponde a essa informa��o deve ser suprimida do XML.
	 *
	 * @var number
	 */
	public $RegimeEspecialTributacao = 1;

	/**
	 * 1 - Sim
	 * 2 - N�o
	 *
	 * @var number
	 */
	public $OptanteSimplesNacional = 1;

	/**
	 * 1 - Sim
	 * 2 - N�o
	 *
	 * @var number
	 */
	public $IncentivoFiscal = 2;

	/**
	 * CO - Convertida
	 * CA - Cancelada
	 *
	 * @var number
	 */
	public $Status = 'CO';

	public $RpsSubstituido;

	public $Servico;

	public $Prestador;

	public $Tomador;

	public $IntermediarioServico;

	public $ConstrucaoCivil;

	public function __construct(){

		$this->IdentificacaoRps 		= new NFSeISSWebIdentificacaoRps();
		$this->RpsSubstituido			= new NFSeISSWebIdentificacaoRps();
		$this->Servico 					= new NFSeISSWebServico();
		$this->Prestador 				= new NFSeISSWebPrestador();
		$this->Tomador 					= new NFSeISSWebTomador();
		$this->IntermediarioServico 	= new NFSeISSWebIntermediarioServico();
		$this->ConstrucaoCivil 			= new NFSeISSWebConstrucaoCivil();
	}
}