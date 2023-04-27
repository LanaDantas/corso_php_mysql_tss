import { useState } from 'react';
// import "../App.css"


const SearchBar = (props) => {
  // Hook useState
    const [taskName, setTaskName] = useState('')
    const [taskDueDate, setTaskDueDate] = useState('')

  function onAddTask() {
      const newTask = {
        name: taskName.trim(),
        due_date: taskDueDate,
        done:false
      };

      props.parentAddTask(newTask)
  }

  function onUpdateStatus() {
    const newStatus = {
      name: taskName.trim(),
      due_date: taskDueDate,
      done:false
    };

    props.parentUpdateStatus(newStatus)
}

  return (
    <section>
      <div className="todo-container">

        <pre>
            {taskName}
            {taskDueDate}
        </pre>


          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossOrigin="anonymous" referrerPolicy="no-referrer" />

          {/* <label className="tasks" htmlFor="task-label"></label> */}

        <header>
            <h1 className="h1-title">TODO List</h1>
        </header>

        <div id="todo-form" className="todo-form">
            <p>Aggiungi task</p>
            <div className="form-control">
                <input type="text" className="todo-input" id="todo-input" name="todo-input" value={taskName}    // quando cambia il valore fai questo
                onChange={evento => setTaskName(evento.target.value)}
                placeholder="Aggiungi una nuova attività" />

            <input type="date" value={taskDueDate}
                onChange={evento => setTaskDueDate(evento.target.value)}
                className="finish-todo" name="date" id="date" />

{!taskName.trim().length>0? 'si':'no'}

            <button type="submit"
                onClick={onAddTask}
                disabled={!taskName.trim().length>0 ? 'Devi inserire un titolo':''}
                className="finish-todo">
                <i className="fa-thin fa-plus"></i>
            </button>
          </div>

        </div>
      </div>
    </section>

  )
}
export default SearchBar

