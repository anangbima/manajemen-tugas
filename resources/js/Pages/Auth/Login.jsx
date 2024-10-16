import { Head, Link, router, useForm, usePage } from '@inertiajs/react'
import React, { useState } from 'react'
import AuthLayout from '../../Layouts/AuthLayout'

const Login = () => {
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
    router.post('/proses-login', values)
  }


  return (
    <AuthLayout>
      <Head title='Login'/>

      <h1>Login</h1>

      <form onSubmit={handleSubmit}>
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

      <Link href='registrasi'>Daftar</Link>
    </AuthLayout>
  )
}

export default Login