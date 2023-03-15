const person = {
    name: 'Sasho',
    age: 24
};

function executeAfterFiveSeconds(number) {
    return new Promise((resoleve, reject) => {
        setTimeout(() => {
            resoleve(number);
        }, 5000);
    });
}

const list = document.getElementById('todos-list');

fetch('./todos.php')
    .then(response => {
        return response.json();
    })
    .then(todos => {
        
        todos.forEach(todo => {
            const todoListItem = document.createElement('li');
            todoListItem.innerText = todo.title;
            list.appendChild(todoListItem);
        });
    });

const todo = {
    title: 'asdfasdfasdf',
    userId: 1,
    completed: false,
}

fetch('https://jsonplaceholder.typicode.com/todos', {
    method: 'POST', 
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(todo),
})
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data);
    });