import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreditNotesPendingComponent } from './credit-notes-pending.component';

describe('CreditNotesPendingComponent', () => {
  let component: CreditNotesPendingComponent;
  let fixture: ComponentFixture<CreditNotesPendingComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CreditNotesPendingComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CreditNotesPendingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
