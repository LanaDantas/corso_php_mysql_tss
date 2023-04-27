import "../../App.css"



const TaskList = (props) => {

    return (
        //fragment
        <>
            <div className="todo-container">

                <div className="todo-employee">
                    <div className="employee-uno">
                        <h4>
                            <i className="fa-solid fa-user" style={{ color: '#fadd05', marginRight: '0.7rem' }}></i>
                            {props.header}
                           <h6>Da fare: {props.tasks.length}</h6>
                        </h4>
                    </div>
                        </div>
                    <div className="todo-list">
                           <h3> {props.children} </h3>
                    </div>
            </div>
        </>
    )
}

export default TaskList