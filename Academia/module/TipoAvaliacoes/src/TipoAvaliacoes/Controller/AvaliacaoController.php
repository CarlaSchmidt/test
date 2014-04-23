<?php
 
namespace TipoAvaliacoes\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
 
class AvaliacaoController extends AbstractActionController
{
    // GET /TipoAvaliacoes
    public function indexAction()
    {
    }
 
    // GET /TipoAvaliacoes/novo
    public function novoAction()
    {
    }
 
    // POST /TipoAvaliacoes/adicionar
    public function adicionarAction()
    {
        // obtém a requisição
    $request = $this->getRequest();
 
    // verifica se a requisição é do tipo post
    if ($request->isPost()) {
        // obter e armazenar valores do post
        $postData = $request->getPost()->toArray();
        $formularioValido = false;
 
        // verifica se o formulário segue a validação proposta
        if ($formularioValido) {
            // aqui vai a lógica para adicionar os dados à tabela no banco
            // 1 - solicitar serviço para pegar o model responsável pela adição
            // 2 - inserir dados no banco pelo model
            // adicionar mensagem de sucesso
            $this->flashMessenger()->addSuccessMessage("Avaliacao criada com sucesso");
 
            // redirecionar para action index no controller avaliacao
            return $this->redirect()->toRoute('novo');
        } else {
            // adicionar mensagem de erro
            $this->flashMessenger()->addErrorMessage("Erro ao criar avaliacao");
 
            // redirecionar para action novo no controllers avaliacao
            return $this->redirect()->toRoute('home', array('action' => 'novo'));
        }
    }
    }
 
    // GET /TipoAvaliacoes/detalhes/id
    public function detalhesAction()
    {
        // filtra id passsado pela url
    $id = (int) $this->params()->fromRoute('id', 0);
 
    // se id = 0 ou não informado redirecione para home
    if (!$id) {
        // adicionar mensagem
        $this->flashMessenger()->addMessage("Tipo de Avaliacao nao Encontrada");
 
        // redirecionar para action index
        return $this->redirect()->toRoute('home');
    }
 
    // aqui vai a lógica para pegar os dados referente ao contato**
    // 1 - solicitar serviço para pegar o model responsável pelo find
    // 2 - solicitar form com dados desse contato*** encontrado
    // formulário com dados preenchidos
    $form = array(
        'codigo'    => 'cod',
        'tipoDeAvaliacao'   => 'descricao',
    );
 
    // dados eviados para detalhes.phtml
    return array('id' => $id, 'form' => $form);
    }
 
    // GET /TipoAvaliacoes/editar/id
    public function editarAction()
    {
        // filtra id passsado pela url
    $id = (int) $this->params()->fromRoute('id', 0);
 
    // se id = 0 ou não informado redirecione para home
    if (!$id) {
        // adicionar mensagem de erro
        $this->flashMessenger()->addMessage("Tipo de Avaliacao nao Encontrado");
 
        // redirecionar para action index
        return $this->redirect()->toRoute('home');
    }
 
    // aqui vai a lógica para pegar os dados referente ao contato**
    // 1 - solicitar serviço para pegar o model responsável pelo find
    // 2 - solicitar form com dados desse contato*** encontrado
 
    // formulário com dados preenchidos
    $form = array(
           'Descricao' => 'vazio',
        
    );
 
    // dados eviados para editar.phtml
    return array('id' => $id, 'form' => $form);
    }
 
    // PUT /TipoAvaliacoes/editar/id
    public function atualizarAction()
    {
         // obtém a requisição
    $request = $this->getRequest();
 
    // verifica se a requisição é do tipo post
    if ($request->isPost()) {
        // obter e armazenar valores do post
        $postData = $request->getPost()->toArray();
        $formularioValido = true;
 
        // verifica se o formulário segue a validação proposta
        if ($formularioValido) {
            // aqui vai a lógica para editar os dados à tabela no banco
            // 1 - solicitar serviço para pegar o model responsável pela atualização
            // 2 - editar dados no banco pelo model
 
            // adicionar mensagem de sucesso
            $this->flashMessenger()->addSuccessMessage("Tipo de Avaliacao editado com sucesso");
 
            // redirecionar para action detalhes
            return $this->redirect()->toRoute('home', array("action" => "detalhes", "id" => $postData['id'],));
        } else {
            // adicionar mensagem de erro
            $this->flashMessenger()->addErrorMessage("Erro ao editar tipo de avaliacao");
 
            // redirecionar para action editar
            return $this->redirect()->toRoute('home', array('action' => 'editar', "id" => $postData['id'],));
        }
    }
    }
 
    // DELETE /TipoAvaliacoes/deletar/id
    public function deletarAction()
    {
        // filtra id passsado pela url
    $id = (int) $this->params()->fromRoute('id', 0);
 
    // se id = 0 ou não informado redirecione para contatos
    if (!$id) {
        // adicionar mensagem de erro
        $this->flashMessenger()->addMessage("tipo de avaliacao não encotrado");
 
    } else {
        // aqui vai a lógica para deletar o contato no banco
        // 1 - solicitar serviço para pegar o model responsável pelo delete
        // 2 - deleta contato
 
        // adicionar mensagem de sucesso
        $this->flashMessenger()->addSuccessMessage("Tipo de Avaliacao ID $id deletado com sucesso");
 
    }
 
    // redirecionar para action index
    return $this->redirect()->toRoute('home');
    }
}