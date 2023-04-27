import "../../App.css"



const TaskList = (props) => {

    return (
        //fragment
        <>
            <div className="todo-employee">
                <div className="employee-uno">
                    <h4>
                        <i className="fa-solid fa-user" style={{color: '#fadd05', marginRight: '0.7rem'}}></i>
                        {props.header}{props.tasks.length}
                    </h4>
                    {props.children}
                </div>
            </div>
            
        </>
    )
}

export default TaskList