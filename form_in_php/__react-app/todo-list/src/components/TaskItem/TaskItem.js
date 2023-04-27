

function TaskItem({ nome_task, done }) {
    return (
        // <div id="todo-list">
        <li className={done ? 'task_gia_fatta' : ''}>{nome_task}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
                integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
                crossOrigin="anonymous" referrerPolicy="no-referrer" />

            {/* <div className="todo done"> */}
                {/* <div className={done ? 'todo done' : ''} /> */}


                    <input className="finish-todo" checked={done} type="checkbox" />
                    {done}
                    <i className="fa-solid fa-check"></i>
                    {/* </button> */}
                    <button className="edit-todo">
                        <i className="fa-solid fa-pen"></i>
                    </button>
                    <button className="remove-todo">
                        <i className="fa-solid fa-xmark"></i>
                    </button>
                </li>
            // </div>
        // </div>
    )
}

export default TaskItem