
const TaskList = (props) => {

    return (
        //fragment
        <>
            <h3 className="todo_list__header">{props.header}{props.tasks.length}</h3>
            <div className="todo-list" id="todo-list">
                {props.children}
            </div>
        </>
    )
}

export default TaskList