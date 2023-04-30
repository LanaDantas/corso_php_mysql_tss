import TaskItem from "./components/TaskItem/TaskItem";
import "./App.css"
import TaskList from "./components/TaskList/TaskList";
import SearchBar from './components/SearchBar';
import React from 'react';
import { useState, useEffect } from 'react';
import { addTask, removeTask, markDone, activeFilter, completedFilter } from "./service/TodoService";

function App() {
  const [taskListData, setTaskListData] = useState([])
  /*   const [todos, setTodos] = useState([])
    const [status, setStatus] = useState('all');
    const [filteredTodos, setFilteredTodos] = useState([]); */

  function parentAddTask(newTask) {
    const newTaskListData = addTask(newTask, taskListData)
    setTaskListData(newTaskListData)
  }

  function parentRemoveTask(taskId) {
    const res = removeTask(taskId, taskListData)
    setTaskListData(res)
  }

  function parentCompleteTask(newStatus) {
    const newStatusData = markDone(newStatus, taskListData)
    setTaskListData(newStatusData)
  }

  function onShowCompleted() {
    const completed = completedFilter(taskListData);
    console.log(completed);
    setTaskListData(completed);
  }

  function onShowActive() {
    const active = activeFilter(taskListData);
    console.log(active);
    setTaskListData(active);
  }

  function onShowAll() {
    setTaskListData(taskListData);
  }

  /*   useEffect(() => {
      console.log(filterHandler());
    }, [todos, status])
  
    const filterHandler = () => {
      switch (status) {
        case 'completed':
          setFilteredTodos(todos.filter(task => task.done === true))
          break;
        case 'active':
          setFilteredTodos(todos.filter(task => task.done === false))
          break;
        default:
          setFilteredTodos(todos)
          break;
      }
    } */


    const list = taskListData.map(task =>
      <TaskItem key={task.task_id}
        listaTask={taskListData} 
        parentRemoveTask={parentRemoveTask}
        parentCompleteTask={parentCompleteTask}
        id={task.id}
        done={task.done}
        nome_task={task.name}
      >
      </TaskItem>)

  return (
    <main>
      <div className="todo-container">
        <header>
          <div className="avatar">
            <img className="avatar__img" src="https://i.pravatar.cc/150?img=1" alt="Elena Rossi" />
            <div className="avatar__user"> Elena Rossi</div>
          </div>
          <h1 className="h1-title">TODO List</h1>
        </header>

        <SearchBar parentAddTask={parentAddTask} />

        <div className="toolbar">
          <div className="filter">
            <h4>Filtra</h4>
            <button onClick={onShowAll} type="button" value="all" className="todo-all"> all </button> 
            <button onClick={onShowActive} type="button" value="active" className="todo-active"> active </button>
            <button onClick={onShowCompleted} type="button" value="completed" className="todo-completed"> completed </button>
          </div>

          <div className="datepicker">
            <div className="date-filter">
              <h4>Filtra per data</h4>
              <div className="form-control datepicker">
                <input type="date" />
                <button type="submit">
                  <i className="fa-thin fa-plus"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <TaskList header={'Impiegato 1'} tasks={taskListData}>
          {list}
        </TaskList>

      </div>
    </main>
  )
}

export default App;
