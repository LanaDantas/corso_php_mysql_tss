import TaskItem from "./components/TaskItem/TaskItem";
import "./App.css"
import TaskList from "./components/TaskList/TaskList";

import React, { useState } from 'react';

function App() {

  // const taskListData = [
  //   {
  //     task_id: 1,
  //     user_id: 1,
  //     name: "comprare il pane",
  //     due_date: "2023/05/02",
  //     done: false
  //   },
  //   {
  //     task_id: 2,
  //     user_id: 2,
  //     name: "andare in banca",
  //     due_date: "2023/05/03",
  //     done: false
  //   }
  // ]

  const [taskListData, setTaskListData] = useState([])

  function aggiungiTask() {
    setTaskListData((attuale) => {
      attuale.push({
        task_id: 1,
        user_id: 1,
        name: "comprare il pane",
        due_date: "2023/05/02",
        done: false
      });

      return attuale;
    }

    )
  }


  const list = taskListData.map(task => <TaskItem key={task.task_id} done={task.done} nome_task={task.name}> </TaskItem>)
  return (
    <main>
      <button onClick={aggiungiTask}> Add task</button>
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
