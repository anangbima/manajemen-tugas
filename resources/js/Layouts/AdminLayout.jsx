import React from 'react'
import Sidebar from '../Components/Sidebar'
import Navbar from '../Components/Navbar'

const AdminLayout = ({children}) => {
  return (
    <div className="admin-layout">
      <Sidebar/>

      <div className='main'>
        <Navbar/>

        <div className='content-wrap'>
          {children}
        </div>
      </div>
    </div>
  )
}

export default AdminLayout