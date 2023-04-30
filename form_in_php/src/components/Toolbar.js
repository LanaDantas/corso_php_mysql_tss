import React from 'react';
import { useState } from 'react';

import { completedFilter, activeFilter } from "../service/TodoService";


const Toolbar = ({ setStatus, parentCompletedStatus, id }) => {
    const [taskListData, setTaskListData] = useState([])

    /*     const statusHandler = (event) => {
            setStatus(event.target.value)
        } */

    function onShowCompleted() {
        const result = completedFilter(taskListData);
        console.log(result);
        setTaskListData(result);
    }

    function onShowActive() {
        const result = activeFilter(taskListData);
        console.log(result);
        setTaskListData(result);
    }

    function onShowAll() {
        setTaskListData(taskListData);
    }

    return (
        <>
            <div className="todo-container">

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
                    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
                    crossOrigin="anonymous" referrerPolicy="no-referrer" />


                <div className="toolbar">
                    <div className="filter">
{/*                         <h4>Filtra</h4>

                        <input onClick={onShowAll} type="button" value="All" className="todo-all"></input>
                        <input onClick={onShowActive} type="button" value="Active" className="todo-active"></input>
                        <input onClick={onShowCompleted} type="button" value="Completed" className="todo-completed"></input>
 */}
                {/* 
                    <select className="filter-select">
                        <option value="all">tutti</option>
                        <option onClick={onShowCompleted} value="completed">completati</option>
                        <option value="active">da fare</option>
                    </select>
                */}

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
            </div>
        </>
    )

}

export default Toolbar