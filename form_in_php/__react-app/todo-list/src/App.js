import TaskItem from "./components/TaskItem/TaskItem";
import "./App.css"
import TaskList from "./components/TaskList/TaskList";
import SearchBar from './components/SearchBar';
import React from 'react';
import { useState } from 'react';
import { addTask } from "./service/TodoService";


function App() {

  const [taskListData,setTaskListData] = useState([])


  const list = taskListData.map(task => <TaskItem key={task.task_id} done={task.done} nome_task={task.name}> </TaskItem>)
 
  function parentAddTask(newTask) {
    const newTaskListData = addTask(newTask,taskListData)
    // console.log(newTaskListData)

    setTaskListData(newTaskListData)
  }
 
  return (
    <main>
      {/* <button onClick={aggiungiTask}> Add task</button> */}

      <SearchBar parentAddTask={parentAddTask} ></SearchBar>

      <TaskList header={'Impiegato 1'} tasks={taskListData}>
        {list}
      </TaskList>

      <TaskList header={'Impiegato 2'} tasks={taskListData}>
        {list}
      </TaskList>

      
    </main>
  )
}

export default App;
