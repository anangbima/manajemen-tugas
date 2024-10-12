import { Head, Link, router, usePage } from '@inertiajs/react'
import React, { useState } from 'react'
import AuthLayout from '../../Layouts/AuthLayout'

const Registrasi = () => {
  const { errors } = usePage().props

  const [values, setValues] = useState({
    email: null,
    password: null,
  })

  function handleChange(e) {
    setValues(values => ({
      ...values,
      [e.target.id]: e.target.value,
    }))
  }

  function handleSubmit(e) {
    e.preventDefault()
    router.post('/proses-registrasi', values)
  }

  return (
    <AuthLayout>
      <Head title='Registrasi'/>

      <h1>Registrasi</h1>

      <form onSubmit={handleSubmit}>
        <input 
          type="text" 
          placeholder='name' 
          name='name'
          id='name'
          onChange={handleChange} 
        />
        {errors.name && <div>{errors.name}</div>}

        <input 
          type="email" 
          placeholder='email' 
          name='email'
          id='email'
          onChange={handleChange} 
        />
        {errors.email && <div>{errors.email}</div>}
        
        <input 
          type="password" 
          placeholder='password' 
          name='password' 
          autoComplete='true'
          id='password'
          onChange={handleChange} 
        />
        {errors.password && <div>{errors.password}</div>}

        <input type="submit" value='Submit' />
      </form>

      <Link href='login'>Login</Link>
    </AuthLayout>
  )
}

export default Registrasi