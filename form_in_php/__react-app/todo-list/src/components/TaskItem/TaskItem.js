import React from 'react';


function TaskItem({ filteredTodos, nome_task, done, id, parentRemoveTask, parentCompleteTask }) {

    function onRemoveTask() {
        parentRemoveTask(id)
    }

    function onCompleteTask() {
        parentCompleteTask(id)
    }

    return (
        <>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
                integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
                crossOrigin="anonymous" referrerPolicy="no-referrer" />

            <div className="todo-list">
                <li className={`todo ${done ? "done" : ""}`}>
                    <h3>{nome_task}</h3>
                    <button className="finish-todo" onClick={ onCompleteTask }>
                        <i className="fa-solid fa-check"></i>
                    </button>

                        {done ? null : (
                    <button className="edit-todo">
                        <i className="fa-solid fa-pen"></i>
                    </button>
                        )}
                        
                    <button className="remove-todo" onClick={onRemoveTask}>
                        <i className="fa-solid fa-xmark"></i>
                    </button>
                </li>
            </div>
        </>
    )
}

export default TaskItem