import TaskItem from "./components/TaskItem/TaskItem";
import "./App.css"
import TaskList from "./components/TaskList/TaskList";
import SearchBar from './components/SearchBar';
import React from 'react';
import { useState } from 'react';
import { addTask, removeTask, updateTask } from "./service/TodoService";


function App() {

  const [taskListData,setTaskListData] = useState([])

  function parentAddTask(newTask) {
    const newTaskListData = addTask(newTask,taskListData)
    setTaskListData(newTaskListData)
  }

  function parentRemoveTask(taskId) {
    const res = removeTask(taskId,taskListData)
    setTaskListData(res)
  }

  function parentUpdateStatus(newStatus) {
    const newStatusData = updateTask(newStatus,taskListData)
    setTaskListData(newStatusData)
  }

  const list = taskListData.map(task => <TaskItem key={task.task_id} 
                                parentRemoveTask={parentRemoveTask}
                                id={task.id}
                                done={task.done}
                                nome_task={task.name}>
                                </TaskItem>)
 
  return (
    <main>
      {/* <button onClick={aggiungiTask}> Add task</button> */}

      <SearchBar parentAddTask={parentAddTask} ></SearchBar>

      <TaskList header={'Impiegato 1'} tasks={taskListData}>
        {list}
      </TaskList>

      
    </main>
  )
}

export default App;
