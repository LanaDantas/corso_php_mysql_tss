

const TaskItem = (props) => {
    return (
        <div id="todo-list">
            <div className="todo {done}">
                <h3>Task</h3>
                <button className="finish-todo">
                    <i className="fa-solid fa-check"></i>
                </button>
                <button className="edit-todo">
                    <i className="fa-solid fa-pen"></i>
                </button>
                <button className="remove-todo">
                    <i className="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
    )
}

export default TaskItem