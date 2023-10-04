import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CreditNotesOverdueComponent } from './credit-notes-overdue.component';

const routes: Routes = [{ path: '', component: CreditNotesOverdueComponent }];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CreditNotesOverdueRoutingModule { }
