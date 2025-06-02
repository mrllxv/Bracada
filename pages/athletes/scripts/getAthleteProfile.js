document.addEventListener("DOMContentLoaded", async () => {
  const params = new URLSearchParams(window.location.search);
  const atletaId = parseInt(params.get('id'), 10); 

  if (isNaN(atletaId)) {
    document.body.innerHTML = "<p>Atleta não encontrado.</p>";
    return;
  }

  try {
    const response = await fetch(`../../controllers/atletaController.php?id=${atletaId}`);
    const atleta = await response.json();

    if (atleta.erro) {
      document.body.innerHTML = `<p>${atleta.erro}</p>`;
      return;
    }

    document.querySelector(".athlete-presentation__name").textContent = atleta.nome;
    document.querySelector(".athlete-presentation__infos-country").textContent = atleta.pais;
    document.querySelector(".athlete-presentation__infos-modality").textContent = atleta.modalidade;
    document.querySelector(".athlete-biography__content").textContent = atleta.biografia;

    const medalhas = atleta.medalhas || { ouro: 0, prata: 0, bronze: 0, total: 0 };

    document.querySelector(".athlete-medals__body").innerHTML = `
      <tr class="athlete-medals__row">
        <td class="athlete-medals__cell">${medalhas.ouro}</td>
        <td class="athlete-medals__cell">${medalhas.prata}</td>
        <td class="athlete-medals__cell">${medalhas.bronze}</td>
        <td class="athlete-medals__cell">${medalhas.total}</td>
      </tr>
    `;

  } catch (error) {
    console.error("Erro ao carregar atleta:", error);
    document.body.innerHTML = "<p>Erro ao carregar os dados do atleta.</p>";
  }
});

