import React from 'react'
import AdminLayout from '../../Layouts/AdminLayout'
import { Head } from '@inertiajs/react'

const Project = ({project}) => {


  return (
    <AdminLayout>
      <Head title='Project' />

      <div className='project'>
        <div className='mb-3'>
          <a href="#" className=''>Create New</a>
        </div>

        <form className=''>
          <input 
            type="text" 
            name='name' 
            id='name' 
            placeholder='name' 
          />

          <textarea 
            name="description" 
            id="description"
          ></textarea>

          <input type="submit" value='Submit' />
        </form>

        <div className='bg-white p-5 rounded-xl shadow mt-3'>
          Project 1
        </div>
      </div>
    </AdminLayout>
  )
}

export default Project