document.addEventListener('DOMContentLoaded', function () {
    var data = [];

    function generateUniqueId() {
        return '_' + Math.random().toString(36).substr(2, 9);
    }

    function addRow(trabalho, status, buttons) {
        var uniqueId = generateUniqueId();

        var row = `<tr data-id="${uniqueId}">
                        <td contenteditable="true" class="trabalho">${trabalho}</td>
                        <td contenteditable="true" class="status">${status}</td>
                        <td><button id="btn_${uniqueId}_1" class="btn btn-light" data-id="${uniqueId}" data-index="1" onclick="changeStatus(this)">${buttons[0]}</button></td>
                        <td><button id="btn_${uniqueId}_2" class="btn btn-light" data-id="${uniqueId}" data-index="2" onclick="changeStatus(this)">${buttons[1]}</button></td>
                        <td><button id="btn_${uniqueId}_3" class="btn btn-light" data-id="${uniqueId}" data-index="3" onclick="changeStatus(this)">${buttons[2]}</button></td>
                        <td><button id="btn_${uniqueId}_4" class="btn btn-light" data-id="${uniqueId}" data-index="4" onclick="changeStatus(this)">${buttons[3]}</button></td>
                    </tr>`;
        document.getElementById('tableBody').innerHTML += row;
        data.push({ id: uniqueId, trabalho: trabalho, status: status, buttons: buttons });
        saveData();
    }

    window.addNewRow = function () {
        var newTrabalho = document.getElementById('newTrabalho').value;
        var newStatus = document.getElementById('newStatus').value;

        if (newTrabalho && newStatus) {
            addRow(newTrabalho, newStatus, ['NÃO', 'NÃO', 'NÃO', 'NÃO']);
            document.getElementById('newTrabalho').value = '';
            document.getElementById('newStatus').value = '';
            document.getElementById('addRowModal').classList.remove('show');
            document.body.classList.remove('modal-open');
            document.body.style.paddingRight = '';

            // Adicione esta linha para carregar os dados após adicionar uma nova linha
            renderTable();
        }
    };

    window.changeStatus = function (button) {
        var uniqueId = button.getAttribute('data-id');
        var buttonIndex = button.getAttribute('data-index');
        var statuses = ['NÃO', 'SIM', 'NDA'];
        var currentStatus = button.innerText;
        var currentIndex = statuses.indexOf(currentStatus);
        var nextIndex = (currentIndex + 1) % statuses.length;

        button.innerText = statuses[nextIndex];

        button.classList.remove('btn-danger', 'btn-success', 'btn-light');
        if (statuses[nextIndex] === 'NÃO') {
            button.classList.add('btn-danger');
        } else if (statuses[nextIndex] === 'SIM') {
            button.classList.add('btn-success');
        } else {
            button.classList.add('btn-light');
        }

        // Atualizar o status no array de dados
        var rowIndex = button.parentNode.parentNode.rowIndex - 1;
        data.find(item => item.id === uniqueId).status = document.querySelector(`[data-id="${uniqueId}"] .status`).innerText;
        data.find(item => item.id === uniqueId).buttons[buttonIndex - 1] = statuses[nextIndex];
        saveData();
    };


    function saveData() {
        // Salvar os dados em um arquivo JSON no servidor
        var jsonData = JSON.stringify(data);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'saveData.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(jsonData);
    }

    function loadData() {
        // Carregar os dados do arquivo JSON no servidor
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var loadedData = JSON.parse(xhr.responseText);
                if (loadedData && Array.isArray(loadedData)) {
                    // Limpar o array de dados existente
                    data = [];

                    // Adicionar os dados carregados ao array
                    loadedData.forEach(function (loadedItem) {
                        data.push(loadedItem);
                    });

                    renderTable();
                }
            }
        };
        xhr.open('GET', 'data.json', true);
        xhr.send();
    }



    function renderTable() {
        // Limpar a tabela
        document.getElementById('tableBody').innerHTML = '';

        // Adicionar linhas à tabela com base nos dados carregados
        data.forEach(function (item) {
            var row = `<tr data-id="${item.id}">
                            <td contenteditable="true" class="trabalho">${item.trabalho}</td>
                            <td contenteditable="true" class="status">${item.status}</td>
                            <td><button id="btn_${item.id}_1" class="btn btn-light" data-id="${item.id}" data-index="1" onclick="changeStatus(this)">${item.buttons[0]}</button></td>
                            <td><button id="btn_${item.id}_2" class="btn btn-light" data-id="${item.id}" data-index="2" onclick="changeStatus(this)">${item.buttons[1]}</button></td>
                            <td><button id="btn_${item.id}_3" class="btn btn-light" data-id="${item.id}" data-index="3" onclick="changeStatus(this)">${item.buttons[2]}</button></td>
                            <td><button id="btn_${item.id}_4" class="btn btn-light" data-id="${item.id}" data-index="4" onclick="changeStatus(this)">${item.buttons[3]}</button></td>
                        </tr>`;

            document.getElementById('tableBody').innerHTML += row;

            // Atualizar as classes dos botões com base no estado
            for (var i = 1; i <= 4; i++) {
                var button = document.getElementById(`btn_${item.id}_${i}`);
                if (item.buttons[i - 1] === 'NÃO') {
                    button.classList.add('btn-danger');
                    button.classList.remove('btn-success', 'btn-light');
                } else if (item.buttons[i - 1] === 'SIM') {
                    button.classList.add('btn-success');
                    button.classList.remove('btn-danger', 'btn-light');
                } else {
                    button.classList.add('btn-light');
                    button.classList.remove('btn-danger', 'btn-success');
                }
            }
        });
    }


    // Carregar os dados quando a página é carregada
    loadData();
});
