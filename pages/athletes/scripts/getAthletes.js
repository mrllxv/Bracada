
  async function carregarAtletas() {
    try {
      const resposta = await fetch('../../api/atletas.php'); // ajuste o caminho se necessário

      if (!resposta.ok) throw new Error('Erro ao buscar atletas');

      const atletas = await resposta.json();
      const container = document.querySelector('.athletes');

      // Limpa o conteúdo atual
      container.innerHTML = '';

      atletas.forEach(atleta => {
        const link = document.createElement('a');
        link.href = "#"; // ou um link para detalhes do atleta, se quiser
        link.classList.add('athlete-card__container');

        const card = document.createElement('article');
        card.classList.add('athlete-card');

        const nome = document.createElement('h2');
        nome.classList.add('athlete-card__name');
        nome.textContent = atleta.nome;

        const nascimento = document.createElement('p');
        nascimento.classList.add('athlete-card__birthday');
        nascimento.textContent = formatarData(atleta.data_nascimento); // opcionalmente formatar

        card.appendChild(nome);
        card.appendChild(nascimento);
        link.appendChild(card);
        container.appendChild(link);
      });

    } catch (erro) {
      console.error('Erro ao carregar atletas:', erro);
    }
  }

  // Função para formatar data no estilo "dd/mm/aaaa"
  function formatarData(data) {
    const d = new Date(data);
    return d.toLocaleDateString('pt-BR', { timeZone: 'UTC' });
  }

  // Chama assim que a página carregar
  window.addEventListener('DOMContentLoaded', carregarAtletas);

