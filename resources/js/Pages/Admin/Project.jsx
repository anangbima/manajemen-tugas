import React, { useState } from 'react'
import AdminLayout from '../../Layouts/AdminLayout'
import { Head, router } from '@inertiajs/react'
import { Button, Dialog, DialogActions, DialogContent, DialogContentText, DialogTitle, TextField } from '@mui/material'


const Project = ({project}) => {
  const [addDialog, setAddDialog] = useState(false)

  const handleAddDialog = () => {
    setAddDialog(!addDialog);
  }


  return (
    <AdminLayout>
      <Head title='Project' />

      <div className='project'>

        <Button variant="contained" onClick={handleAddDialog}>Create New</Button>

        <Dialog
          fullWidth={true}
          maxWidth='sm'
          open={addDialog}
          onClose={handleAddDialog}
          PaperProps={{ 
            sx: { borderRadius: "10px" }, 
            component : 'form',
            onSubmit : (e) => {
              e.preventDefault();

              const formData = new FormData(e.currentTarget);
              const formJson = Object.fromEntries(formData.entries());

              const payload = {
                name : formJson.name,
                description : formJson.description,
              }

              router.post('/posts', payload)
            }
          }}
        >
          <DialogTitle>Create New Project</DialogTitle>
          <DialogContent>

            <TextField
              margin="dense"
              id="name"
              name="name"
              label="Name"
              type="text"
              fullWidth
              variant="outlined"
            />

            <TextField
              margin="dense"
              id="dexcription"
              name="description"
              label="description"
              type="text"
              fullWidth
              variant="outlined"
            />

          </DialogContent>
          <DialogActions>
            <Button onClick={handleAddDialog}>Cancel</Button>
            <Button type="submit" variant='contained'>Submit</Button>
          </DialogActions>
        </Dialog>

        <div className='bg-white p-5 rounded-xl shadow mt-3'>
          Project 1
        </div>
      </div>
    </AdminLayout>
  )
}

export default Project