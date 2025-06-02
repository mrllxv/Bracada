document.addEventListener('DOMContentLoaded', async () => {
    const tbody = document.querySelector('.athlete-medals__body');

    tbody.innerHTML = '';

    try {
        const response = await fetch('/Bracada/controllers/medalhasController.php'); 

        if (!response.ok) {
            throw new Error('Erro ao buscar os dados da API');
        }

        const atletas = await response.json();

        atletas.forEach(atleta => {
            const row = document.createElement('tr');
            row.classList.add('athlete-medals__row');

            row.innerHTML = `
                <td class="athlete-medals__cell athlete-medals__cell-country">${atleta.pais}</td>
                <td class="athlete-medals__cell athlete-medals__cell-name">${atleta.nome}</td>
                <td class="athlete-medals__cell athlete-medals__cell-gold">${atleta.ouro}</td>
                <td class="athlete-medals__cell athlete-medals__cell-silver">${atleta.prata}</td>
                <td class="athlete-medals__cell athlete-medals__cell-bronze">${atleta.bronze}</td>
                <td class="athlete-medals__cell athlete-medals__cell-total">${atleta.total_medalhas}</td>
            `;

            tbody.appendChild(row);
        });

    } catch (error) {
        console.error('Erro ao carregar os dados de medalhas:', error);

        const errorRow = document.createElement('tr');
        errorRow.innerHTML = `
            <td colspan="6" style="text-align: center; color: red;">Erro ao carregar os dados.</td>
        `;
        tbody.appendChild(errorRow);
    }
});

