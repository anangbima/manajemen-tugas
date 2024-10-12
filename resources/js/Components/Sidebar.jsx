import { Link } from '@inertiajs/react'
import React from 'react'

const Sidebar = () => {
  return (
    <div className='sidebar'>
      <div className='title'>
        <b>Task</b>master
      </div>

      <hr />

      <ul className='link-wrap'>
        <li>
          <Link className='link' href='/admin'>Dashboard</Link>
        </li>
        <li>
          <Link className='link' href='/admin/projects'>Projects</Link>
        </li>
        <li>
          <Link className='link' href='/admin/user'>User</Link>
        </li>
      </ul>
      
    </div>
  )
}

export default Sidebar