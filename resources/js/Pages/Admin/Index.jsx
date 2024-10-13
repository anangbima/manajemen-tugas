import React from 'react'
import AdminLayout from '../../Layouts/AdminLayout'
import { Head } from '@inertiajs/react'

const Index = () => {
  return (
    <AdminLayout>
      <Head title='Dashboard Admin' />
      
      <div className='dashboard'>
        <div className='today'>
          11 Januari 2023
        </div>

        <div className='greet'>
          Welcome Back, Admin
        </div>

        <div>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores soluta odio adipisci, eos tempore expedita, culpa eum quasi officia ratione voluptas tempora vero quis mollitia saepe dolorem sed nisi dolorum?
        </div>

        <div>

        </div>
      </div>
    </AdminLayout>
  )
}

export default Index