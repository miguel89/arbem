<?php
 
namespace Urbem\CoreBundle\Entity\Orcamento;

/**
 * SuplementacaoSuplementada
 */
class SuplementacaoSuplementada
{
    /**
     * PK
     * @var string
     */
    private $exercicio;

    /**
     * PK
     * @var integer
     */
    private $codSuplementacao;

    /**
     * PK
     * @var integer
     */
    private $codDespesa;

    /**
     * @var integer
     */
    private $valor = 0;

    /**
     * ManyToOne
     * @var \Urbem\CoreBundle\Entity\Orcamento\Despesa
     */
    private $fkOrcamentoDespesa;

    /**
     * ManyToOne
     * @var \Urbem\CoreBundle\Entity\Orcamento\Suplementacao
     */
    private $fkOrcamentoSuplementacao;


    /**
     * Set exercicio
     *
     * @param string $exercicio
     * @return SuplementacaoSuplementada
     */
    public function setExercicio($exercicio)
    {
        $this->exercicio = $exercicio;
        return $this;
    }

    /**
     * Get exercicio
     *
     * @return string
     */
    public function getExercicio()
    {
        return $this->exercicio;
    }

    /**
     * Set codSuplementacao
     *
     * @param integer $codSuplementacao
     * @return SuplementacaoSuplementada
     */
    public function setCodSuplementacao($codSuplementacao)
    {
        $this->codSuplementacao = $codSuplementacao;
        return $this;
    }

    /**
     * Get codSuplementacao
     *
     * @return integer
     */
    public function getCodSuplementacao()
    {
        return $this->codSuplementacao;
    }

    /**
     * Set codDespesa
     *
     * @param integer $codDespesa
     * @return SuplementacaoSuplementada
     */
    public function setCodDespesa($codDespesa)
    {
        $this->codDespesa = $codDespesa;
        return $this;
    }

    /**
     * Get codDespesa
     *
     * @return integer
     */
    public function getCodDespesa()
    {
        return $this->codDespesa;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return SuplementacaoSuplementada
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * ManyToOne (inverse side)
     * Set fkOrcamentoDespesa
     *
     * @param \Urbem\CoreBundle\Entity\Orcamento\Despesa $fkOrcamentoDespesa
     * @return SuplementacaoSuplementada
     */
    public function setFkOrcamentoDespesa(\Urbem\CoreBundle\Entity\Orcamento\Despesa $fkOrcamentoDespesa)
    {
        $this->exercicio = $fkOrcamentoDespesa->getExercicio();
        $this->codDespesa = $fkOrcamentoDespesa->getCodDespesa();
        $this->fkOrcamentoDespesa = $fkOrcamentoDespesa;
        
        return $this;
    }

    /**
     * ManyToOne (inverse side)
     * Get fkOrcamentoDespesa
     *
     * @return \Urbem\CoreBundle\Entity\Orcamento\Despesa
     */
    public function getFkOrcamentoDespesa()
    {
        return $this->fkOrcamentoDespesa;
    }

    /**
     * ManyToOne (inverse side)
     * Set fkOrcamentoSuplementacao
     *
     * @param \Urbem\CoreBundle\Entity\Orcamento\Suplementacao $fkOrcamentoSuplementacao
     * @return SuplementacaoSuplementada
     */
    public function setFkOrcamentoSuplementacao(\Urbem\CoreBundle\Entity\Orcamento\Suplementacao $fkOrcamentoSuplementacao)
    {
        $this->exercicio = $fkOrcamentoSuplementacao->getExercicio();
        $this->codSuplementacao = $fkOrcamentoSuplementacao->getCodSuplementacao();
        $this->fkOrcamentoSuplementacao = $fkOrcamentoSuplementacao;
        
        return $this;
    }

    /**
     * ManyToOne (inverse side)
     * Get fkOrcamentoSuplementacao
     *
     * @return \Urbem\CoreBundle\Entity\Orcamento\Suplementacao
     */
    public function getFkOrcamentoSuplementacao()
    {
        return $this->fkOrcamentoSuplementacao;
    }
}
